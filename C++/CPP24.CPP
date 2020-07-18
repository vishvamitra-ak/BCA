#include<iostream.h>
#include<conio.h>
class sumn
{
	int m,n,s;
public:
	in();
	sum();
	disp();
};
sumn::in()
{
	cout<<"Enter limits:\n";
	cin>>m>>n;
}
sumn::sum()
{
	s=0;
	for(int i=m;i<=n;i++)
	{
		s+=i;
	}
}
sumn::disp()
{
	cout<<"Sum= "<<s;
}
void main()
{
	clrscr();
	sumn a;
	a.in();
	a.sum();
	a.disp();
	getch();
}