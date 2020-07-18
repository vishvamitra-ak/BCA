//Merge Sort
#include<stdio.h>
#include<conio.h>
void ms(int[],int,int);
void m(int[],int,int,int,int);
int main()
{
	int a[10],n,i;
	clrscr();
	printf("Enter n: ");
	scanf ("%d",&n);
	printf("Enter %d elements\n",n);
	for(i=0;i<n;i++)
		scanf("%d",&a[i]);
	ms(a,0,n);
	printf("Sorted Array\n");
	for(i=0;i<n;i++)
		printf("%d ",a[i]);
	getch();
}
void ms(int a[],int i,int j)
{
	int mid;
	if(i<j)
	{
		mid=(i+j)/2;
		ms(a,i,mid);
		ms(a,mid+1,j);
		m(a,i,mid,mid+1,j);
	}
}
void m(int a[],int i1,int i2,int j1,int j2)
{
	int t[10];
	int i,j,k;
	i=i1;
	j=i2;
	k=0;
	while(i<=j1&&j<=j2)
	{
		if(a[i]<a[j])
			t[k++]=a[i++];
		else
			t[k++]=a[j++];
	}
	while(i<=j1)
		t[k++]=a[i++];
	while(j<=j2)
		t[k++]=a[j++];
	for(i=i1,j=0;i<=j2;i++,j++)
		a[i]=t[j];
}
