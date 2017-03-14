## Problem Statement
Often times we have noticed a lack of proper pronunciation and language fluency among children in the rural areas. A primary reason for this is improper pronunciation skills among the teachers. Also instead of using printed images, the students should be given the opportunity to feel and touch the objects to improve their understanding. Computer systems could help us solve this problem, but due to the cost factor in picture it prevents us from leveraging this technology at large. It’s quite a challenge to develop cost effective systems to address this problem.
## Solution
The latest wave in affordable computer technology is the Raspberry Pi, making it easier to learn, hack and tinker around for creative inventions. Considering the fact that this $35 computer device is easily available is most schools, we thought it would be better to utilize these existing devices and help with a better learning for the students. We used Makey Makey (a customized board based on Arduino Leonardo) to detect which object the child touched. Based on the touch, our system will pronounce the name of the object which the teacher has already fed in the system. This will not only help children to learn the pronunciation easily but also will help them to know about smell, shape and weight of the objects. 
## Solution Approach
We installed Apache Tomcat on the Raspberry Pi and programmed it with Python programming language and used Makey Makey board which itself acts as a touch based keyboard. A module called as eSpeak was used speak out the object’s name as programmed. Objects like Apple, Banana, and Guava were connected with wires to the Makey Makey board. Whenever a child touches the object, the circuit completes the computer speaks out the objects name.
Additionally, we created a web based Dashboard application with PHP, HTML, CSS wherein the teacher can just input the name of the objects order wise in a predefined format and the device will correctly interpret the objects. The teacher need not know programming to configure the system.
## Final Outcome
So, using Raspberry Pi and Makey Makey Arduino based board we developed a smart learning system which will further enhance the way students learn in classroom.
You can see the working video of the project on Youtube.
https://www.youtube.com/watch?v=8pJyDtg7hNM