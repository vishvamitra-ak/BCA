#include<stdio.h>
#include<conio.h>
int max,min,a[10],n,i,j;
void maxmin(int,int);
main()
{
	clrscr();

	printf("Enter size: ");
	scanf("%d",&n);
	printf("Enter %d elements\n",n);
	for(i=0;i<n;i++)
		scanf("%d",&a[i]);
	max=a[0];
	min=a[0];
	maxmin(0,n-1);
	printf("\nLargest=%d, Smallest=%d\n",max,min);
	getch();
}
void maxmin(int i,int j)
{
	int max1,min1,mid;
	if(i==j)
	{
		max=a[i];
		min=a[i];
	}
	else if(i==j-1)
	{
		if(a[i]>a[j])
		{
			max=a[i];
			min=a[j];
		}
		else
		{
			max=a[j];
			min=a[i];
		}
	}
	else
	{
		mid=(i+j)/2;
		maxmin(i,mid);
		max1=max;
		min1=min;
		maxmin(mid+1,j);
		if(max<max1)
			max=max1;
		if(min1>min)
			min=min1;
	}
}
