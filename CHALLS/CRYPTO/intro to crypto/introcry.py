from Crypto.Util.number import getPrime, bytes_to_long, long_to_bytes
flag1=bytes_to_long("iguctf{placehol".encode('latin-1'))
flag2=bytes_to_long("der}".encode('latin-1'))
flag=flag1*flag2
print(flag)