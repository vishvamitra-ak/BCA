MVI C,00
LDA 8001
MOV B,A
LDA 8000
BACK:CMP B
JC GO
SUB B
INR C
JMP BACK
GO:STA 9001
MOV A,C
STA 9000
HLT