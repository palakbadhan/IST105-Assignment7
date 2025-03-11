import sys

def validate_input(numbers):
    try:
        num_list = list(map(int, numbers.split(",")))
        return num_list
    except ValueError:
        print("Error: Please enter valid integers separated by commas.")
        sys.exit(1)

def perform_operations(num_list, threshold):
    bitwise_and = num_list[0]
    bitwise_or = num_list[0]
    bitwise_xor = num_list[0]

    for num in num_list[1:]:
        bitwise_and &= num
        bitwise_or |= num
        bitwise_xor ^= num

    filtered_numbers = [num for num in num_list if num > threshold]

    return bitwise_and, bitwise_or, bitwise_xor, filtered_numbers

if __name__ == "__main__":
    if len(sys.argv) != 3:
        print("Usage: python3 bitwise_operations.py '<numbers>' <threshold>")
        sys.exit(1)

    numbers = sys.argv[1]
    threshold = int(sys.argv[2])

    num_list = validate_input(numbers)
    bitwise_and, bitwise_or, bitwise_xor, filtered_numbers = perform_operations(num_list, threshold)

    print(f"Bitwise AND: {bitwise_and}")
    print(f"Bitwise OR: {bitwise_or}")
    print(f"Bitwise XOR: {bitwise_xor}")
    print(f"Numbers greater than threshold: {filtered_numbers}")
