	   MVI B,00
	   MVI C,05
	   LXI D,8000
	   LXI H,9000

BACK:	   LDAX D
	   ADC M
	   JNC X
	   MVI B,01
	   JMP Y
X:	   MVI B,00
Y:	   MVI H,A0
	   MOV M,A
	   MVI H,90
	   INX D
	   INX H
	   DCR C
	   JNZ BACK
	   MVI H,A0
	   INX H
	   MOV M,B
	   HLT
