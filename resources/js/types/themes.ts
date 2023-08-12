export interface Theme {
    name: string
    title: string
    description: string
}

export interface PageTempate {
    name: string
    label: string
    blocks?: Array<{
        name: string
        label: string
    }>
}
