# eval'ma komşu al 2 [218 pts]

**Category:** MISC

**Solves:** 16

## Description

But I got smarter, 

I got harder in the nick of time Honey, 

I rose up from the dead, 

I do it all the time I got a list of names, and yours is in red, 

underlined I check it once, then I check it twice, oh!

>Not: Kritik verilerinizin olmadığı bir ortamda deneme yapınız. Soruya bağlı ilgili dosyanın açacağı herhangi bir olumsuz durumdan İGÜCTF 24' sorumlu değildir.

>*flag format: iguctf{placeholder}*

>**Author: karlos**

## Solution

## Source Code
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
		random_number = random.randint(0, 100)
		if random_number < 20:
			commandd= 'exec(\'import os;os.system("rm "+ zipname);os.system("del "+zipname)\')'
			pyminizip.compress(zipname, None, commandd, None, 5)
			os.remove(zipname)
			zipname = commandd
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

iguctf{4ll_1_th1nk_4bout_1s_k4rma_312d5fdb2424d754f3c9dc08909f2c90cb5a343eaf37da6c4cbaf18cb2ea8140}
