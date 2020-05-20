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




cols = []


df=pd.read_excel("Survey Form.xls")#reads CSV FILE
for f in df.columns:
    if('(ct)' in str(f)):
        cols = cols+[f]
df =  pd.read_excel("Survey Form.xls",usecols = cols)
print(df.columns)

X = df.iloc[:, 0:4].values
y = df.iloc[:, 4].values

#print(X,y)
