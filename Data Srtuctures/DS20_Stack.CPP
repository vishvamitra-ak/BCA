//Stack
#include<stdio.h>
#include<conio.h>
#include<stdlib.h>
#define max 5
int stack[max],c,e,tos=-1;
void push();
void pop();
void disp();
void main()
{
	clrscr();

	do
	{
		printf("\n1.Push\n2.Pop\n3.Display\nEnter Any Other Number To Exit\nEnter Your Choice:");
		scanf ("%d",&c);
		switch(c)
		{
			case 1: push();
					break;
			case 2: pop();
					break;
			case 3: disp();
					break;
			default:getch();
					exit(0);
		}
	}while (c<=5);
}
void push()
{
	if(tos>=max)
		printf("\nStack is already full\n");
	else
	{
		printf("\nEnter element to be inserted: ");
		scanf ("%d",&e);
		tos++;
		stack[tos]=e;
	}
}
void pop()
{
	if(tos<0)
		printf("\nStack is already empty\n");
	else
		tos--;
}
void disp()
{
	if(tos<0)
		printf("\nStack is empty\n");
	else
	{
		for(int i=0;i<=tos;i++)
			printf("%d ",stack[i]);
		printf("\n");
	}
}

