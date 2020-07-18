//Selection Sort
#include<stdio.h>
#include<conio.h>
void selection(int a[],int);
main()
{
	int a[10],n,i;
	//clrscr();
	printf("enter n:");
	scanf("%d",&n);
	printf("enter %d elements:\n",n);
	for(i=0;i<n;i++)
	{
		scanf("%d",&a[i]);
	}
	printf("unsorted list\n");
	for(i=0;i<n;i++)
	{
		printf("%d ",a[i]);
	}
	selection(a,n);
	printf("\nsorted list\n");
	for(i=0;i<n;i++)
	{
		printf("%d ",a[i]);
	}
	getch();
}
void selection(int a[],int n)
{
	int i,j,temp,pos;
	for(i=0;i<n;i++)
	{
		pos=i;
		for(j=i+1;j<n;j++)
		{
			if(a[j]<a[pos])
				pos=j;
		}
		temp=a[pos];
		a[pos]=a[i];
		a[i]=temp;
	}
}
