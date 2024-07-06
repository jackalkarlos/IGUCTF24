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
