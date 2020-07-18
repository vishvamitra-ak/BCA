#include<iostream>
using namespace std;
int a[10];
int part(int p,int n)
{
    int x=a[n],i=p-1,j,t;
    for(j=p;j<n;j++)
    {
        if(a[j]<=x)
        {
            i++;
            t=a[i];
            a[i]=a[j];
            a[j]=t;
        }
    }
    t=a[i+1];
    a[i+1]=a[n];
    a[n]=t;
    return (i+1);
}
void qs(int i,int j)
{
    int p;
    if(i<j)
    {
        p=part(i,j);
        qs(i,p-1);
        qs(p+1,j);
    }
}
int main()
{
	int n,t,i;

	cout<<"Enter n\n";
	cin>>n;
	cout<<"Enter "<<n<<" elements\n";
	for(int i=0;i<n;i++)
		cin>>a[i];
	cout<<"Unsorted Array:\n";
	for(i=0;i<n;i++)
		cout<<a[i]<<" ";
	qs(0,n);
	cout<<"\nSorted Array:\n";
	for(i=0;i<n;i++)
		cout<<a[i]<<" ";
}
