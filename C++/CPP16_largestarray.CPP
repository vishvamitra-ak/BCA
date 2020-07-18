#include<iostream.h>
#include<conio.h>
void main()
{
	int a[10],n,l;
	clrscr();

	cout<<"Enter n\n";
	cin>>n;
	cout<<"Enter "<<n<<" elements\n";
	for(int i=0;i<n;i++)
		cin>>a[i];
	cout<<"\nArray\n";
	for(i=0;i<n;i++)
		cout<<a[i]<<" ";
	l=a[0];
	for(i=0;i<n;i++)
	{
		if(a[i]>l)
			l=a[i];
	}
	cout<<"\n\nLargest is "<<l;
	getch();
}