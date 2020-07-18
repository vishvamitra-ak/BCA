//Queue
#include<stdio.h>
#include<conio.h>
#include<stdlib.h>
#define max 5
int q[max],r=-1,f=-1,e;
void insert();
void del();
void disp();
void main()
{
	int c;
	clrscr();

	do
	{
		printf("\n1.Insert\n2.Delete\n3.Display\nEnter any other to exit\n\n");
		scanf ("%d",&c);

		switch(c)
		{
			case 1: insert();
					break;
			case 2: del();
					break;
			case 3: disp();
					break;
			default:getch();
					exit(0);
		}
	}while(c<=4);
}
void insert()
{
	if(r==max-1)
		printf("\nQueue is already full\n");
	else
	{
		printf("Enter the element: ");
		scanf ("%d",&e);
		r++;
		q[r]=e;
		if(f==-1)
			f++;
	}
}
void del()
{
	if(f>r)
		printf("\nQueue is empty no deletion possible\n");
	else
	{
		e=q[f];
		printf("Deleted element is %d\n",e);
		f++;
	}
}
void disp()
{
	int i;
	if(f>r)
		printf("\nQueue is empty\n");
	else
	{
		for(i=f;i<=r;i++)
			printf("%d ",q[i]);
		printf("\n");
	}
}