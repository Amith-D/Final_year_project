# -*- coding: utf-8 -*-
"""
Created on Sat May 16 22:33:01 2020

@author: Amith Doreswamy
"""
df=pd.read_csv("Survey Form.csv",index_col=0, parse_dates=True)#reads CSV FILE
print(df.columns)
