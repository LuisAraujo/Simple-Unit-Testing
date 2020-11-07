#include<sdtio.h>

main(){
	
	int contador, x, y;
	scanf("%d", &x);
	scanf("%d", &y);
	
	for (contador=x; contador<=y; contador=contador + 1)	
	{
		if (contador % 7 == 0)
			printf("%d", contador);
	}

} 