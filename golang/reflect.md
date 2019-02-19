## reflect

example:

```go
func StructToMap(dynamicParame interface{}) map[string]string {

	input := make(map[string]string)
	column := reflect.ValueOf(dynamicParame).Elem()

	for i := 0; i < column.NumField(); i++ {
		valueField := column.Field(i)
		typeField := column.Type().Field(i)

		dynamicParame := valueField.Interface()
		column := reflect.ValueOf(dynamicParame)

		switch column.Kind() {
		case reflect.Int, reflect.Int8, reflect.Int16, reflect.Int32, reflect.Int64:
			input[typeField.Name] = strconv.FormatInt(column.Int(), 10)

		case reflect.String:
			input[typeField.Name] = column.String()
		}
	}
  return input
```
