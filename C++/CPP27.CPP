#include<iostream.h>
#include<conio.h>
class cir
{
	float r,pi,a1,c1;
public:
	void in()
	{
		cout<<"Enter radius= "<<endl;
		cin>>r;
	}
	void a()
	{
		pi=3.142;
		a1=pi*r*r;
		cout<<"Area= "<<a1<<endl;
	}
	void c()
	{
		c1=2*pi*r;
		cout<<"Circum= "<<c1<<endl;
	}
};
void main()
{
	clrscr();
	cir z;
	z.in();
	z.a();
	z.c();
	getch();
}