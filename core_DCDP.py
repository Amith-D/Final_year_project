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

df=pd.read_csv("Survey Form.csv",index_col=0, parse_dates=True,usecols = ['B'])#reads CSV FILE
print(df.columns)
