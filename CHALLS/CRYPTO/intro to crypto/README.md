# intro to crypto [288 pts]

**Category:** CRYPTO

**Solves:** 11

## Description
flag = 454678396395310520544855350048005783427996184429697112292483845021269465836750076223098608343172957596088419

>*flag format: iguctf{placeholder}*

>**Author: karlos**

## Solution

Soru metninde verilen script dosyası incelendiğinde, bayrağın 2 ayrı parçasını long değerine dönüştürüp bu değerleri çarptığını ve yazdırdığını anlayabiliyorduk. 
![carbon (1)](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/dc2e49f3-1494-45af-88f4-e3a9e8115f0c)

İki sayının birbiriyle çarpılması sonucunda oluşturulan bir sayıyı geri döndürmek için, çarpanlara ayırma (factorization) işlemi yapmamız gerekiyor. Oldukça büyük bir sayı olduğu için, çarpanlara ayırma konusunda zorlanabiliriz. Çoğu sayının çarpanlarının bulundurulduğu Factordb sitesinden yardım almayı deneyeceğiz.

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/63584926-cac5-486e-90a1-e4098416fa42)

Aşağıdaki gibi bir scriptle bulduğumuz faktörleri kullanarak bayrağı oluşturabiliriz.

```py
n = 454678396395310520544855350048005783427996184429697112292483845021269465836750076223098608343172957596088419
factors = [53, 3011, 33613, 33881915474865277]

possible_m1_m2 = []
for factor in factors:
    if n % factor == 0:
        possible_m1 = factor
        possible_m2 = n // factor
        possible_m1_m2.append((possible_m1, possible_m2))

for m1, m2 in possible_m1_m2:
    flag_bytes = m2.to_bytes((m2.bit_length() + 7) // 8, byteorder='big') + m1.to_bytes((m1.bit_length() + 7) // 8, byteorder='big')
    print("Possible m1:", m1)
    print("Possible m2:", m2)
    print("Flag:", flag_bytes.decode('utf-8', errors='ignore'))
 ```

### Flag
iguctf{1ts_4lways_4b0ut_f4ctor1zation_x_l00l}
