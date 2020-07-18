#include<iostream.h>
#include<conio.h>
void main()
{
	int a,b,c,d,e,f;
	clrscr();

	cout<<"Enter 4 Numbers\n";
	cin>>a>>b>>c>>d;

	//e=a>b?(a>c?a:c):(b>c?b:c);
	//f=e>d?e:d;
	if(a>b)
	{
		if(a>c)
			e=a;
		else
			e=c;
	}
	else if(b>c)
			e=b;
	else e=c;
	if (e>d)
		f=e;
	else
		f=d;

	cout<<"Largest is "<<f<<endl;
	getch();
}