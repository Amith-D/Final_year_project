# -*- coding: utf-8 -*-
"""
Created on Sat May 16 22:33:01 2020

@author: Amith Doreswamy
"""

import pandas as pd
import numpy as np
import random
import time
import re
import collections
import sklearn
from sklearn.model_selection import train_test_split
from sklearn.model_selection import train_test_split
from sklearn.ensemble import RandomForestRegressor
#import geohash
from sklearn.metrics import mean_squared_error
import math
from sklearn.externals import joblib

#global var for col to select
cols = []

df=pd.read_excel("Survey Form3.xlsx")#reads CSV FILE
for f in df.columns:
    if('(ct)' in str(f)):
        cols = cols+[f]
        
#selecting only the needed coluoumns
df =  pd.read_excel("Survey Form2.xlsx",usecols = cols)

def fill_missing_values_with_mean(dff):
    #case 1 just empty
    dff.replace('', np.nan, inplace=True)
    #case 2 multiple spaces
    dff.replace(r'^\s*$', np.nan, regex=True,inplace = True)
    #fill them with mean
    dff = dff.fillna(dff.mean())
    return dff
df = fill_missing_values_with_mean(df)

#print(df.head)

'''
for i in range(len(df.columns)):
    print(df.columns[i],i)
'''

#taking 3 arrays for slicing the columns in the dataframe for X
l_1 = df.iloc[ :,0:15].values
l_2 = df.iloc[ :,16:23].values
l_3 = df.iloc[ :,37:42].values
l_4 = df.iloc[ :,44:46].values

#taking 3 arrays for slicing the columns in the dataframe for y
l_4 = df.iloc[ :,23:37].values
l_5 = df.iloc[ :,42:44].values
l_6 = df.iloc[ :,46:48].values



#horizontal stacking them to get a complete array
X = np.hstack((l_1,l_2,l_3,l_4))
y = np.hstack((l_4,l_5,l_6))





## Split dataset to training and test set
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size = 0.2, random_state = 0)


# Take Logarithm of the num_orders to reduce the amount of impact by outliers

y_train = np.log10(y_train)
y_test = np.log10(y_test)

y_train  = np.nan_to_num(y_train) 
y_test = np.nan_to_num(y_test) 



# Fit Regression Model
reg = RandomForestRegressor(n_estimators=900, max_depth=10000, n_jobs=-1, warm_start=True)
reg.fit(X_train,y_train)


# Calculate Training and Test Accuracy
training_accuracy = reg.score(X_train, y_train)
test_accuracy = reg.score(X_test, y_test)



# Calculate Root mean squared error
rmse_train = np.sqrt(mean_squared_error(reg.predict(X_train),y_train))
rmse_test = np.sqrt(mean_squared_error(reg.predict(X_test),y_test))
print("Training Accuracy = %0.3f, Test Accuracy = %0.3f, RMSE (train) = %0.3f, RMSE (test) = %0.3f" % (training_accuracy, test_accuracy, rmse_train, rmse_test))

# Print Actual and Predicted values for first 50 test set
#pd.DataFrame(np.round(np.power(10,np.column_stack((reg.predict(X_test),y_test))), decimals=0).astype(int)).head(20)

# Store the trained model
joblib.dump(reg, 'trained_random_forest(test).pkl')

#predicted values
P_values = reg.predict(X[15].reshape(1,-1))


#Actual values
A_values = y[15].reshape(1,-1)
























