# 절대경로와 상대경로
상대경로는 절대경로에 따라 그 위치가 변하는 것으로 다양한 표현방법이 존재   
> "/index.html" -> 최상위 디렉토리   
> "../index.html" -> 현재 디렉토리의 부모 디렉토리   
> "./index.html" -> 현재 디렉토리   

# Scalability
나의 웹,앱 어플리케이션의 규모가 커지면서 컴퓨터에 부하가 걸릴 가능성이 있다.   
이를 해결하기 위해서는 크게 2가지 방법이 있다.
1. Scale up -> 컴퓨터 자체의 성능을 끌어 올리는 방법.
2. Scale out -> 컴퓨터 여러 대에 분산시키는 방법    
  2.1 Round-Robin   
: DNS에서 서로 다른 computer의 IP를 client에게 부여함으로써 traffic을 줄임    
  2.2 Load Balancer   
: 부하를 분산시켜주는 장비, 웹서버의 상태에 따라 자동적으로 traffic을 조절
3. Cloud computing -> 가상화, 종량제
