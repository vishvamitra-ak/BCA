MVI D,00
LDA 8000
MOV C,A
XRA A
BACK:ADI 01
DAA
JNC GO
INR D
GO:DCR C
JNZ BACK
STA 9000
MOV A,D
STA 9001
HLT