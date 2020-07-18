	   MVI B,05

BACK2:	   MVI C,05
	   LXI H,8000

BACK1:	   MOV A,M
	   INX H
	   CMP M
	   JNC X
	   JZ X
	   MOV D,M
	   MOV M,A
	   DCX H
	   MOV M,D
	   INX H

X:	   DCR C
	   JNZ BACK1
	   DCR B
	   JNZ BACK2
	   HLT
