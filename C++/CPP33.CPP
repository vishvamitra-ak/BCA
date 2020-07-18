#include<iostream.h>
#include<conio.h>
class large3
{
	int a,b,c,d;
public:
	in()
	{
		cout<<"Enter 4 nos.\n";
		cin>>a>>b>>c>>d;
	}
	friend large(large3);
};
large(large3 x)
{
	int e,f;
	e=x.a>x.b?(x.a>x.c?x.a:x.c):(x.b>x.c?x.b:x.c);
	f=e>x.d?e:x.d;
	cout<<"largest of 3 nos: "<<e<<endl;
	cout<<"largest of 4 nos: "<<f<<endl;
}
void main()
{
	clrscr();
	large3 l1;
	l1.in();
	large(l1);
	getch();
}