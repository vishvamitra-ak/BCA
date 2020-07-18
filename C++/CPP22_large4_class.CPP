#include<iostream.h>
#include<conio.h>
class l
{
	int a,b,c,d,e,f;
public:
	void in()
	{
		cout<<"Enter 4 numbers\n";
		cin>>a>>b>>c>>d;
	}
	void disp()
	{
		e=a>b?(a>c?a:c):(b>c?b:c);
		f=e>d?e:d;
		cout<<"Largest is "<<f;
	}
};
void main()
{
	l l1;
	clrscr();
	l1.in();
	l1.disp();
	getch();
}