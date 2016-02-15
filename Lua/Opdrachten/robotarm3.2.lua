require 'robot_arm'
robot_arm:load_level('exercise 11')
robot_arm.speed = 0.99
getal = 20
robot_arm:move_right()
for q= 1, getal do
  robot_arm:grab()
  color = robot_arm:scan()
  print(color)
    if color== 'red' then
      for i = 1, 10 do
        robot_arm:move_right()
      end
      robot_arm:drop()
      for u = 1, 10 do
        robot_arm:move_left()
      end
    else
      robot_arm:drop()
      robot_arm:move_right()
    end
end