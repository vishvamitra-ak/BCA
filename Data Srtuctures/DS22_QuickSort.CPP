//Circular queue
#include<stdio.h>
#include<conio.h>
#include<stdlib.h>
#define max 5
int q[10],f=0,r=-1,e;
void ins();
void del();
void disp();
void main()
{
	int c;
	clrscr();
	while(1)
	{
		printf("\n1.Insert\n2.Delete\n3.Display\n");
		scanf ("%d",&c);
		switch(c)
		{
			case 1 :ins();
					break;
			case 2 :del();
					break;
			case 3 :disp();
					break;
			default:exit(0);
		}
	}
}
void ins()
{
	if((f==0&&r==max-1)||(f>0&&r==f-1))
		printf("Queue is overflow\n");
	else
	{
		printf("Enter element to be inserted: ");
		scanf ("%d",&e);
		if(r==max-1&&f>0)
		{
			r=0;
			q[r]=e;
		}
		else
		{
			if((f==0&&r==-1)||(r!=f-1))
				q[++r]=e;
		}
	}
}
void del()
{
	if(f==0 && r==-1)
		printf("Queue is underflow\n");
	if(f==r)
	{
		e=q[f];
		r=-1;
		f=0;
	}
	else if(f==max-1)
	{
		e=q[f];
		f=0;
	}
	else
		e=q[f++];
	printf("Deleted elementis %d\n",e);
}
void disp()
{
	int i,j;
	if(f==0 && r==-1)
		printf("Queue is underflow\n");
	if(f>r)
	{
		for(i=0;i<=r;i++)
			printf("%d ",q[i]);
		for(j=0;j<=max-1;j++)
			printf("%d ",q[i]);
	}
	else
	{
		for(i=f;i<=r;i++)
			printf("%d ",q[i]);
	}
}

