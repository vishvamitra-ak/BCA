#include<iostream.h>
#include<conio.h>
class av
{
	static int a,b,c,d;
	static float e;
public:
	static sum();

};
int av::a;
int av::b;
int av::c;
int av::d;
float av::e;
static sum()
{
		cout<<"Enter a,b,c\n";
		cin>>a>>b>>c;
		d=a+b+c;
		e=d/3.0;
		cout<<"Sum= "<<d<<"\nAvg= "<<e;
}
void main()
{
	clrscr();
	av x;
	x.sum();
	getch();
}
