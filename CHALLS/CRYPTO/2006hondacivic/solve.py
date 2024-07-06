alphabet = 'abcdefghijklmnopqrstuvwxyz{}_'

hondacivic2006alphabethahahahahahaha={
"0":"hon",
"1":"da",
"2":"ci",
"3":"vic",
"4":"20",
"5":"06",
"6":"h",
"7":"o",
"8":"n",
"9":"d",
"10":"a",
"11":"cc",
"12":"ii",
"13":"vv",
"14":"i",
"15":"c",
"16":"2",
"17":"0",
"18":"00",
"19":"6",
"20":"honda",
"21":"civic",
"22":"2006",
"23":"ivi",
"24":"ond",
"25":"aciv",
"26":"ic",
"27":"HONDACIVIC",
"28":"HONDACIVIC2006"
}

def encrypt(encryptit):
	result=""
	loc = {lett: alphabet.index(lett) + 29 for lett in alphabet}
	encryptit = encryptit.lower()
	for lett in encryptit:
		if lett in alphabet:
			i = loc[lett] % 29
			result+= hondacivic2006alphabethahahahahahaha[str(i)] + " "
	a= ''.join([chr(ord(char) ^ 0x24) for char in result])
	with open("result","w") as resfile:
		resfile.write(a)

def decrypt():
	with open("honda_civic_HONDA_CIVIC_CIVIC2006", "rb") as encrypted:
		encrypted=encrypted.read().decode('latin-1')
	encrypted=''.join([chr(ord(char) ^ 0x24) for char in encrypted])
	loc = {lett: alphabet.index(lett) + 29 for lett in alphabet}
	reverse_honda_dict =  {v: k for k, v in hondacivic2006alphabethahahahahahaha.items()}
	decrypted = ""
	for word in encrypted.split():
		i = int(reverse_honda_dict[word])
		letter = alphabet[(i  % 29)]
		decrypted += letter
	return decrypted


print(decrypt())
