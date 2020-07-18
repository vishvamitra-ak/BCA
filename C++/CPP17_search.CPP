#include<iostream.h>
#include<conio.h>
#include<stdlib.h>
void main()
{
	int a[10],n,k;
	clrscr();

	cout<<"Enter n\n";
	cin>>n;
	cout<<"Enter "<<n<<" elements\n";
	for(int i=0;i<n;i++)
		cin>>a[i];
	cout<<"\nArray\n";
	for(i=0;i<n;i++)
		cout<<a[i]<<" ";
	cout<<"\nEnter key\n";
	cin>>k;

	for(i=0;i<n;i++)
	{
		if(k==a[i])
		{
			cout<<endl<<k<<" found at "<<i+1<<" position\n";
			getch();
			exit(0);
		}
	}
	cout<<endl<<k<<" not found\n";
	getch();
}