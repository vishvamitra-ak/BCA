#include<iostream.h>
#include<conio.h>
class fib
{
	int n,a,b,c;
public:
	in();
	disp();
};
fib::in()
{
	cout<<"Enter limit: ";
	cin>>n;
}
fib::disp()
{
	a=0;b=1;
	cout<<a<<" "<<b<<" ";
	for(int i=2;i<n;i++)
	{
		c=a+b;
		cout<<c<<" ";
		a=b;
		b=c;
	}
}
void main()
{
	clrscr();
	fib f;
	f.in();
	f.disp();
	getch();
}