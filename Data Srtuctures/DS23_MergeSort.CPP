//Quick Sort
#include<stdio.h>
#include<conio.h>
void qs(int[],int,int);
void main()
{
	int a[10],n,i;
	clrscr();

	printf("Enter size\n");
	scanf ("%d",&n);
	printf("%d elements\n",n);
	for(i=0;i<n;i++)
		scanf("%d",&a[i]);
	qs(a,0,n-1);
	printf("Sorted array:\n");
	for(i=0;i<n;i++)
		printf("%d ",a[i]);
	getch();
}
void qs (int a[10],int f,int l)
{
	int p,j,t,i;
	if(f<l)
	{
		p=f;
		i=f;
		j=l;
		while(i<j)
		{
			while(a[i]<=a[p]&&i<l)
				i++;
			while(a[j]>a[p])
				j--;
			if(i<j)
			{
				t=a[i];
				a[i]=a[j];
				a[j]=t;
			}
		}
		t=a[p];
		a[p]=a[j];
		a[j]=t;
		qs(a,f,j-1);
		qs(a,j+1,l);
	}
}