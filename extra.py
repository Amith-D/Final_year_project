# -*- coding: utf-8 -*-
"""
Created on Wed May 27 22:53:51 2020

@author: Amith Doreswamy
"""

import pandas as pd 
cols = []

df=pd.read_excel("Survey Form.xls")#reads CSV FILE
for f in df.columns:
    if('(ct)' in str(f)):
        cols = cols+[f]

        
#selecting only the needed coluoumns
data =  pd.read_excel("Survey Form.xls",usecols = cols)
 
# sorting by first name 

data.sort_values('Gender(ct)', inplace = True) 

  
# making a bool series 

bool_series = data["Gender(ct)"].duplicated() 

  
# displaying data 
print(data.head() )

  
# display data 
data[bool_series] 