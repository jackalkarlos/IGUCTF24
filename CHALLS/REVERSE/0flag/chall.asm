
section	.data

myArray dw 0x5AD,0x1,0x2,0x632,0x4,0x4D4,0x2108,0x7,0x61A,0x9,0xA,0x3E7,0x378,0xD,0xE,0xF,0x223,0x11,0x12,0x13,0x237,0x15,0x103,0x17,0x1BC,0x19,0x1A,0x9F,0x28E,0x9F,0x1E,0x1F,0x309,0x21,0x22,0x23,0x287,0x25,0x9F,0x93,0x93,0x29,0x2A,0x1F0,0x101,0x2D,0x2E,0xD6,0x146,0x31,0x32,0x33,0x34,0x24BE,0x36,0x37,0x315,0x3DB,0x3A,0x3B,0x9D,0x3D,0x165,0x2F1,0x1C8,0x41,0x42,0x43,0x7CF,0x93,0x46,0x47,0x93,0x49,0x4A,0x2F3,0x2FE,0x309,0x4E,0x4F,0x9F,0x3B7,0x52,0x53,0x93,0x354,0x171,0x57,0x22B8,0x2327,0x5A,0x9D,0x167,0x102,0x1C8,0x5F,0x25E2,0x1699,0x62,0x63,0x61A,0x65,0x613,0xDE3,0x768,0x69,0x61B,0x6B,0x457,0x8AE,0x6E,0x6F,0x5C6,0x71,0x72,0x1632,0x74,0x75,0x1571,0x77,0x5C6,0x79,0x7A,0x7B,0x7C,0x7D,0x5C6,0x7F
section	.text
	global _start
_start:
mov ecx,0
mov eax,0
loop:
    mov edx,[myArray + ecx * 4]
    sub edx,ecx
    inc ecx
    cmp ecx,128
    jnz loop