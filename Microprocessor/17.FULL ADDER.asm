LHLD 8001
LDA 8000
MOV B,A
XRA H
XRA L
STA 9000
MOV A,B
ANA H
MOV D,A
MOV A,B
ANA L
MOV E,A
MOV A,H
ANA L
ORA D
ORA E
STA 9001
HLT