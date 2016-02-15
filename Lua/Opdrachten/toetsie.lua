require 'robot_arm'
robot_arm:random_level(4)
robot_arm.speed = 0.85
kleur = true
print ("Welke kolom moet er worden verplaatst?")
kolom = string.lower(io.read())
if kolom == "4" then
    for i = 1, 3 do
    robot_arm:move_right()
  end
elseif kolom == "3" then
  for i = 1, 2 do
    robot_arm:move_right()
  end
elseif kolom == "2" then
  robot_arm:move_right()
end
  for t = 1, 6 do
    robot_arm:grab()
    color = robot_arm:scan()
    print(color)
       if color== "nil" then
       kleur = false
       else 
       kleur = true
     end
     if kleur == true then
   for u = 1, 15 do
      robot_arm:move_right()
    end
    robot_arm:move_left()
    robot_arm:drop()
    for y = 1, 16 do
      robot_arm:move_left()
    end
    for r = 1, kolom do
      robot_arm:move_right()
      end
  elseif kleur == false then
    color = robot_arm:scan()
  end
  end
