# eval'ma komşu al 1 [218 pts]

**Category:** MISC

**Solves:** 16

## Description
Ooh, look what you made me do

Look what you made me do

Look what you just made me do

Look what you just made me...

>*flag format: iguctf{placeholder}*

>**Author: karlos**

## Solution

## Source Code (Bu kısım yarışmada paylaşılmamıştır.)
```py
import random
import sys
import zipfile
import pyminizip
import os

sys.set_int_max_str_digits(999999999)

first_run=True

for i in range(100):
	if first_run==True:
		r1 = random.randint(10000, 99999)
		r2 = random.randint(10000, 99999)
		logicaloperatorlist=["&","|","^","<<",">>"]
		zipname = str(r1) + " " +random.choice(logicaloperatorlist) + " " +str(r2)
		password = str(eval(zipname))
		pyminizip.compress("flag.txt", None, zipname, password, 5)
		first_run=False
	else:
		r1 = random.randint(10000, 99999)
		r2 = random.randint(10000, 99999)
		logicaloperatorlist=["&","|","^","<<",">>"]
		zipname2 = str(r1) + " " +random.choice(logicaloperatorlist) + " " +str(r2)
		password2 = str(eval(zipname2))
		pyminizip.compress(zipname, None, zipname2, password2, 5)
		os.remove(zipname)
		zipname = zipname2
```

### Flag

iguctf{bir_fl4g_g1der_b1r_fl4g_gel1r_9c87040dfe62ac6eb5b483faf6b0e8f14673eebf26d9107823703c8f65843b98}
