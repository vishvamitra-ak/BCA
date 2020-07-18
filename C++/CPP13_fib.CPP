#include<iostream.h>
#include<conio.h>
void main()
{
	int a=0,b=1,c,n;
	clrscr();

	cout<<"Enter n\n";
	cin>>n;
	cout<<a<<" "<<b<<" ";
	for(int i=2;i<=n;i++)
	{
		c=a+b;
		cout<<c<<" ";
		a=b;b=c;
	}
	getch();
}