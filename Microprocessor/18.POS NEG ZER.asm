MVI C,06
MVI B,00
MVI D,00
MVI E,00
LXI H,8000
BACK:MOV A,M
ADI 00
JNZ X
INR B
JMP Z
X:JP Y
INR E
JMP Z
Y:INR D
Z:INX H
DCR C
JNZ BACK
MOV A,B
STA 9000
MOV A,D
STA 9001
MOV A,E
STA 9002
HLT