Cset=new Array(33);
Dset=new Array(33);


C30=new Array(5);
D30=new Array(5);
Cset[30]=C30;
Dset[30]=D30;
C30[0]="0991";
D30[0]="ÎÚÂ³Ä¾Æë";
C30[1]="0993";
D30[1]="Ê¯ºÓ×Ó";
C30[2]="0998";
D30[2]="¿¦Ê²";
C30[3]="0995";
D30[3]="ÍÂÂ³·¬";
C30[4]="0997";
D30[4]="¿â¶ûÀÕ";
C31=new Array(1);
D31=new Array(1);
Cset[31]=C31;
Dset[31]=D31;
C31[0]="0085";
D31[0]="";
C32=new Array(1);
D32=new Array(1);
Cset[32]=C32;
Dset[32]=D32;
C32[0]="0083";
D32[0]="";

        function setShi(sheng,shi)
        {
                param=sheng.selectedIndex-1;
                  if(param>=0)
                  {
                        shi.options.length=0;
                        for(i=0;i<Cset[param].length;i++)
                        {
                                shi.options.length++;
                                shi.options[i].text=Dset[param][i];
                                shi.options[i].value=Dset[param][i];
                        }
                  }else
                  {
                     shi.options.length=0;
                     shi.options.length++;
                     shi.options[0].text="ÇëÑ¡Ôñ";
                     shi.options[0].value="";
                  }
        }
