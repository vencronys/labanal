cmake_minimum_required(VERSION 3.30)
project(labanal)

set(CMAKE_CXX_STANDARD 20)

# Collect all .cpp files in the src/ directory
file(GLOB SOURCES "src/*.cpp")

# Collect all .h files in the include/ directory (if needed for IDEs like CLion)
file(GLOB HEADERS "include/*.h")

# Add the executable target
add_executable(labanal ${SOURCES} ${HEADERS})

# Optionally, add include directories for the header files
target_include_directories(labanal PRIVATE include)
