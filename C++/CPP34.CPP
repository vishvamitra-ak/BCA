#include<iostream.h>
#include<conio.h>
class intr
{
	int p,t,r;
public:
	in()
	{
		cout<<"p,t,r\n";
		cin>>p>>t>>r;
	}
	friend si(intr);
};
si(intr x)
{
	float si1;
	si1=x.p*x.t*x.r/100.0;
	cout<<"SI= "<<si1;
}
void main()
{
	clrscr();
	intr i;
	i.in();
	si(i);
	getch();
}