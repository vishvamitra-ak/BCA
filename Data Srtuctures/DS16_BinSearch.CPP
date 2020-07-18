//Binary Search
#include<stdio.h>
#include<conio.h>
void sort(int[],int);
int search(int[],int,int);
void main()
{
	clrscr();
	int a[10],n,i,key;
	printf("Enter n\n");
	scanf ("%d",&n);
	printf("Enter %d elements:\n",n);
	for(i=0;i<n;i++)
		scanf("%d",&a[i]);
	sort(a,n);
	printf("\nEnter key:\n");
	scanf ("%d",&key);
	search(a,n,key);
	getch();
}
void sort(int a[10],int n)
{
	int i,j,t;
	for(i=0;i<n;i++)
	{
		for(j=i+1;j<n;j++)
		{
			if(a[i]>a[j])
			{
				t=a[i];
				a[i]=a[j];
				a[j]=t;
			}
		}
	}
	printf("Sorted Array:\n");
	for(i=0;i<n;i++)
		printf("%d ",a[i]);
}
int search(int a[10],int n,int key)
{
	int l=0,m,h=n;
	while(l<=h)
	{
		m=(l+h)/2;
		if(a[m]==key)
		{
			printf("%d Found at %d position\n",key,m+1);
			return 0;
		}
		else if(key>a[m])
			l=m+1;
		else
			h=m-1;
	}
	printf("%d not found\n",key);
	return 0;
}

