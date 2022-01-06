<?php
namespace nabidh;

class NTE implements Segment {

    

    private $SetID_NTE = '';
    private $SourceComment = '';
    private $Comment = '';
    private $CommentType = '';

    /**
     * NTE constructor.
     * @param string $SetID_NTE
     * @param string $SourceComment
     * @param string $Comment
     * @param string $CommentType
     */
    public function __construct(string $SetID_NTE, string $SourceComment, string $Comment, string $CommentType)
    {
        $this->SetID_NTE = $SetID_NTE;
        $this->SourceComment = $SourceComment;
        $this->Comment = $Comment;
        $this->CommentType = $CommentType;
    }

    /**
     * @return string
     */
    public function getSetIDNTE(): string
    {
        return $this->SetID_NTE;
    }

    /**
     * @param string $SetID_NTE
     */
    public function setSetIDNTE(string $SetID_NTE): void
    {
        $this->SetID_NTE = $SetID_NTE;
    }

    /**
     * @return string
     */
    public function getSourceComment(): string
    {
        return $this->SourceComment;
    }

    /**
     * @param string $SourceComment
     */
    public function setSourceComment(string $SourceComment): void
    {
        $this->SourceComment = $SourceComment;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->Comment;
    }

    /**
     * @param string $Comment
     */
    public function setComment(string $Comment): void
    {
        $this->Comment = $Comment;
    }

    /**
     * @return string
     */
    public function getCommentType(): string
    {
        return $this->CommentType;
    }

    /**
     * @param string $CommentType
     */
    public function setCommentType(string $CommentType): void
    {
        $this->CommentType = $CommentType;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
    }


}