#include<stdio.h>
#include<conio.h>
void qs (int[],int,int);
int part (int[],int,int);
main()
{
	//clrscr();
	int i,j,a[10],n;

	printf("Enter size: ");
	scanf("%d",&n);
	for(i=1;i<=n;i++)
		scanf("%d",&a[i]);
	printf("\nUnsorted Array: ");
	for(i=1;i<=n;i++)
		printf("%d ",a[i]);
	qs(a,1,n);
	printf("\nSorted Array: ");
	for(i=1;i<=n;i++)
		printf("%d ",a[i]);
	//getch();
}
void qs(int a[],int i,int j)
{
	int p;
	if(i<j)
	{
		p=part(a,i,j);
		qs(a,i,p-1);
		qs(a,p+1,j);
	}
}
int part (int a[],int l,int h)
{
	int k,i,j,t;
	k=a[l];
	i=l+1;
	j=h;
	while(1)
	{
		if(i<h&&k>a[i])
			i++;
		while(k<a[j])
			j--;
		if(i<j)
		{
			t=a[i];
			a[i]=a[j];
			a[j]=t;
		}
		else
		{
			t=a[l];
			a[l]=a[j];
			a[j]=t;
			return j;
		}
	}
}
