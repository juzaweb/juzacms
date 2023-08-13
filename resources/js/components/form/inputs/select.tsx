import * as Select2 from 'react-select';

export interface SelectProps {
    name?: string;
    id?: string;
    label?: string;
    value?: string;
    class?: string;
    dataUrl?: string;
    placeholder?: string;
    required?: boolean;
    multiple?: boolean;
    disabled?: boolean;
    readonly?: boolean;
    options?: Array<{ label: string; value: string; options?: Array<{ label: string; value: string }> }>;
    onChange?: (e: any) => void;
}

const SelectElement = Select2.default;

// const remoteFiltering = React.useCallback((filterText) => {
//     getJson('https://trial.mobiscroll.com/airports/' + encodeURIComponent(filterText), (data) => {
//         const airports = [];
//         for (const item of data) {
//             airports.push({ text: item.name, value: item.code });
//         }
//         setRemoteData(airports);
//     }, 'jsonp');
// }, []);

// const CustomOption = ({children, ...props}) => (nativeProps: Select2.OptionProps) => (
//     <Select2.components.Option
//         {...nativeProps}
//         innerProps={{
//             ...nativeProps.innerProps,
//             ...props
//         }}
//     >{props.data.label}</Select2.components.Option>
// );

export default function Select(props: SelectProps) {
    let name = props.name ? (props.multiple ? props.name + '[]' : props.name) : undefined;
    let value = undefined;

    if (props.value) {
        value = props.options?.find(
            (c) => (
                c.value === props.value
                || (c?.options ? c.options?.find((o) => o.value === props.value) : false)
            )
        );

        if (value?.options) {
            value = value.options.find((o) => o.value === props.value);
        }
    }

    return (
        <div className="form-group">
            {props.label && (
                <label className="col-form-label" htmlFor={props.id}>
                    {props.label}
                    {props.required ? (
                        <abbr>*</abbr>
                    ) : ''}
                </label>
            )}

            <SelectElement
                name={name}
                id={props.id}
                className={props.class}
                isMulti={props.multiple}
                options={props.options}
                onChange={props.onChange}
                placeholder={props.placeholder}
                value={value}
                isClearable={true}
                isDisabled={props.disabled}
                //components={{Option: OptionWrapper({'data': props.value})}}
            />
        </div>
    );
}
