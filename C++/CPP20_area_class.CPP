#include<iostream.h>
#include<conio.h>
class aoc
{
private:
	float pi,r,a;
public:
	void in()
	{
		cout<<"Enter Radius\n";
		cin>>r;
	}
	void calc()
	{
		pi=3.142;
		a=pi*r*r;
	}
	void disp()
	{
		cout<<"Area= "<<a;
	}
};
void main()
{
	clrscr();
	aoc a1;
	a1.in();
	a1.calc();
	a1.disp();
	getch();
}

