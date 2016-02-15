vanbovennaarbeneden.luarequire 'robot_arm' 
robot_arm:load_level('exercise 5')
robot_arm.speed = 0.95
robot_arm:move_right()
for i = 1, 7 do
    robot_arm:grab()
  for o = 1, 8 do
    robot_arm:move_right()
  end
    robot_arm:drop()
for u = 1, 8 do
    robot_arm:move_left()
  end
  end 