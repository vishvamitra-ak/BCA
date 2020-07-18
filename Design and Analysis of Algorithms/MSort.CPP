//Merge Sort
#include<stdio.h>
#include<conio.h>
void ms(int [],int,int);
void m(int [],int,int,int);
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
void ms(int a[],int low,int high)
{
	int mid;
	if(low<high)
	{
		mid=(low+high)/2;
		ms(a,low,mid);
		ms(a,mid+1,high);
		m(a,low,mid,high);
	}
}
void m(int a[],int low,int mid,int high)
{
	int i=low,j=mid+1,k=low,t[10];
	while(i<=mid&&j<=high)
	{
		if(a[i]<a[j])
			t[k++]=a[i++];
		else
			t[k++]=a[j++];
	}
	while(i<=mid)
		t[k++]=a[i++];
	while(j<=high)
		t[k++]=a[j++];
	for(i=low;i<k;i++)
		a[i]=t[i];
}
