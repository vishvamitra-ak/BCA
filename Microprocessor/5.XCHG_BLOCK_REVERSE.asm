MVI C,05
LXI H,8004
LXI D,9000
BACK:MOV B,M
LDAX D
XCHG
MOV M,B
STAX D
XCHG
DCX H
INX D
DCR C
JNZ BACK
HLT

